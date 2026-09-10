@extends('layouts.app')
@section('title', "Sign In | C'Bites")
@section('content')
    <x-navbar />
    <main id="main-content" class="min-h-[70vh] bg-[#fff7f0] py-16">
        <div class="mx-auto max-w-lg px-5">
            <div
                class="rounded-[2rem] border border-[#8c4b2f]/10 bg-white p-7 shadow-[0_20px_60px_rgba(90,45,29,0.10)] sm:p-9">
                <div class="text-center">
                    <img src="{{ asset('images/cbites-logo.png') }}" alt="C'Bites logo" class="mx-auto h-16 w-auto">
                    <h1 class="mt-6 text-3xl font-extrabold tracking-tight text-[#402117]">Welcome Back</h1>
                    <p class="mt-2 text-sm leading-6 text-[#76594c]">Demo sign-in page for the Week 5 front-end project.
                        Authentication is not connected yet.</p>
                </div>
                <form class="mt-8 space-y-5" data-demo-signin>
                    <label class="form-field"><span>Email</span><input type="email" placeholder="you@example.com"
                            required></label>
                    <label class="form-field"><span>Password</span><input type="password" placeholder="••••••••"
                            required></label>
                    <button type="submit"
                        class="w-full rounded-full bg-[#e95cae] px-6 py-3 text-sm font-bold text-white transition hover:bg-[#d94b9e]">Sign
                        In</button>
                    <p class="hidden rounded-xl bg-[#fff1f7] px-4 py-3 text-center text-sm text-[#7a365d]"
                        data-signin-message>Demo only — no account system is connected yet.</p>
                </form>
            </div>
        </div>
    </main>
    <x-footer />
@endsection
