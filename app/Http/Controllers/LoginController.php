<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    // Show Login Form
    public function showLoginForm()
    {
        /**if (User::count() === 0) {
            return redirect()->route('register');
        }**/
        return view('auth.login');
    }

    // Handle Login
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'name' => 'required',
                'password' => 'required',
            ]);

            // Attempt to authenticate using 'username' for credentials
            if (Auth::attempt(['name' => $credentials['name'], 'password' => $credentials['password']])) {
                $request->session()->regenerate();
                return redirect()->route('home');
                Log::info('Login attempt success');
            }

            // If authentication fails, log an error and redirect back with a message
            Log::error('Login attempt failed', [
                'name' => $credentials['name'],
                'ip_address' => $request->ip(),
                'time' => now(),
            ]);

            return back()->withErrors([
                'name' => 'The provided credentials do not match our records.',
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Validation error, log it
            Log::error('Validation error on login attempt', [
                'request_data' => $request->all(),
                'validation_errors' => $e->errors(),
                'ip_address' => $request->ip(),
                'time' => now(),
            ]);

            return back()->withErrors($e->errors())->withInput();

        } catch (\Exception $e) {
            // Catch any other exceptions
            Log::error('Unexpected error during login', [
                'exception_message' => $e->getMessage(),
                'stack_trace' => $e->getTraceAsString(),
                'ip_address' => $request->ip(),
                'time' => now(),
            ]);

            return back()->withErrors(['general' => 'An unexpected error occurred. Please try again later.']);
        }
    }


    // Show Registration Form
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Handle Registration
    public function register(Request $request)
    {
        try {
            Log::info('Request received:', $request->all());
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|string|min:8',
            ]);
            // Create the user
            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);
            Log::info('User creation attempt:', $validatedData);
            return view('auth.login')->with('success', 'Registration successful! You can now login.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // If validation fails, return the errors and keep the inputs
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // General error handling
            Log::error('Registration failed: ' . $e->getMessage());
            return back()->withErrors(['general' => 'An error occurred. Please try again later.']);
        }
    }

    // Handle Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
