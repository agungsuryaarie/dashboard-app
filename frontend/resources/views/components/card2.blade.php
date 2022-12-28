<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
    <div class="intro-y">
        <div class="box px-4 py-4 mb-3 flex items-center bg-purple-600 zoom-in">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="target"
                data-lucide="activity" class="lucide lucide-target report-box__icon text-danger">
                <circle cx="12" cy="12" r="10"></circle>
                <circle cx="12" cy="12" r="6"></circle>
                <circle cx="12" cy="12" r="2"></circle>
            </svg>
            <div class="ml-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
