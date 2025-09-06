<x-layouts.main>
    <div class="flex flex-col lg:flex-row">
        <div class="max-w-3xl lg:max-w-sm mx-auto py-10 px-6 dark:text-[#EDEDEC]">
            <h1 class="text-3xl font-bold mb-4">Terms &amp; Conditions</h1>
            <p class="">Welcome to {{ config('app.name') }}. By accessing or using our website and services, you agree to comply with and be bound by the following Terms &amp; Conditions. Please read them carefully.</p>
        </div>
        <div class="text-[13px] leading-[20px] flex-1 px-6 pb-12 lg:px-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-sm">
            <div class="max-w-4xl mx-auto py-10 px-6">
                <h2 class="text-xl font-semibold mt-6 mb-2">1. Use of Our Services</h2>
                <p class="mb-4">
                    You agree to use our services only for lawful purposes and in accordance with these Terms. You may not use our website in a way that could damage, disable, or impair our platform.
                </p>

                <h2 class="text-xl font-semibold mt-6 mb-2">2. User Accounts</h2>
                <p class="mb-4">
                    If you create an account, you are responsible for maintaining the confidentiality of your login information and for all activities under your account.
                </p>

                <h2 class="text-xl font-semibold mt-6 mb-2">3. Intellectual Property</h2>
                <p class="mb-4">
                    All content, design, logos, and materials on this site are owned by {{ config('app.name') }} and are protected by copyright and trademark laws. You may not copy, reproduce, or distribute them without our written consent.
                </p>

                <h2 class="text-xl font-semibold mt-6 mb-2">4. Limitation of Liability</h2>
                <p class="mb-4">
                    {{ config('app.name') }} is not responsible for any damages that result from the use or inability to use our services. Use of our website is at your own risk.
                </p>

                <h2 class="text-xl font-semibold mt-6 mb-2">5. Third-Party Links</h2>
                <p class="mb-4">
                    Our website may contain links to third-party websites. We are not responsible for the content or practices of those websites.
                </p>

                <h2 class="text-xl font-semibold mt-6 mb-2">6. Changes to These Terms</h2>
                <p class="mb-4">
                    We may update these Terms &amp; Conditions from time to time. Any changes will be effective immediately upon posting on this page.
                </p>

                <h2 class="text-xl font-semibold mt-6 mb-2">7. Contact Us</h2>
                <p class="mb-4">
                    If you have any questions about these Terms, please contact us via the <a href="{{ route('about') }}" class="text-blue-400 underline"> About Us </a> page.
                </p>
            </div>
        </div>
    </div>
</x-layouts.main>
