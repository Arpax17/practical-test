<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        @cookieconsentscripts
        @fluxAppearance
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full  text-sm mb-6 not-has-[nav]:hidden ">
                <nav class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="flex">
                        <a href="{{ route('home') }}" class="ms-1 flex items-end space-x-2 rtl:space-x-reverse" wire:navigate>
                            <x-app-logo />
                        </a>
                    </div>
                    <flux:sidebar.toggle class="lg:hidden justify-self-end" icon="bars-2" inset="right" />
                    <div class="-mb-px max-lg:hidden">
                        <flux:navbar >
                            <flux:navbar.item  :href="route('home')" :current="request()->routeIs('home')" wire:navigate>
                                {{ __('Home') }}
                            </flux:navbar.item>
                            <flux:navbar.item  :href="route('about')" :current="request()->routeIs('about')" wire:navigate>
                                {{ __('About Us') }}
                            </flux:navbar.item>
                            <flux:navbar.item  :href="route('terms')" :current="request()->routeIs('terms')" wire:navigate>
                                {{ __('Terms & Conditions page') }}
                            </flux:navbar.item>
                            <flux:navbar.item  :href="route('privacy')" :current="request()->routeIs('privacy')" wire:navigate>
                                {{ __('Privacy Policy page') }}
                            </flux:navbar.item>
                        </flux:navbar>
                    </div>

                    <flux:sidebar stashable sticky class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
                        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

                        <a href="{{ route('home') }}" class="ms-1 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                            <x-app-logo />
                        </a>

                        <flux:navlist variant="outline">
                            <flux:navlist.group :heading="__('Platform')">
                                <flux:navlist.item :href="route('home')" :current="request()->routeIs('home')" wire:navigate>
                                {{ __('Home') }}
                                </flux:navlist.item>
                                <flux:navlist.item :href="route('about')" :current="request()->routeIs('about')" wire:navigate>
                                {{ __('About Us') }}
                                </flux:navlist.item>
                                <flux:navlist.item :href="route('terms')" :current="request()->routeIs('terms')" wire:navigate>
                                {{ __('Terms & Conditions page') }}
                                </flux:navlist.item>
                                <flux:navlist.item :href="route('privacy')" :current="request()->routeIs('privacy')" wire:navigate>
                                {{ __('Privacy Policy page') }}
                                </flux:navlist.item>
                            </flux:navlist.group>
                        </flux:navlist>

                        <flux:spacer />
                    </flux:sidebar>
                </nav>

        </header>

        <div class="flex w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex  w-full flex-col-reverse lg:flex-row mx-auto py-10 px-6">
                {{ $slot }}
            </main>
        </div>

        @cookieconsentview
        <script>
            document.addEventListener('keydown', function (event) {
                if (event.ctrlKey && event.key === 'Enter') {
                    window.location.href = "{{ route('login') }}";
                }
            });
        </script>
        @fluxScripts
    </body>
</html>

