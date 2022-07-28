<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Page header -->
        <div class="mb-8">

            <!-- Title -->
            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Account Settings ✨</h1>

        </div>

        <div class="bg-white shadow-lg rounded-sm mb-8">
            <div class="flex flex-col md:flex-row md:-mr-px">

                <!-- Sidebar -->
                <div class="flex flex-nowrap overflow-x-scroll no-scrollbar md:block md:overflow-auto px-3 py-6 border-b md:border-b-0 md:border-r border-slate-200 min-w-60 md:space-y-3">
                    <!-- Group 1 -->
                    <div>
                        <div class="text-xs font-semibold text-slate-400 uppercase mb-3">Business settings</div>
                        <ul class="flex flex-nowrap md:block mr-3 md:mr-0">
                            <li class="mr-0.5 md:mr-0 md:mb-0.5">
                                <a class="flex items-center px-2.5 py-2 rounded whitespace-nowrap bg-indigo-50"  href="settings.html">
                                    <svg class="w-4 h-4 shrink-0 fill-current text-indigo-400 mr-2" viewBox="0 0 16 16">
                                        <path d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z" />
                                    </svg>
                                    <span class="text-sm font-medium text-indigo-500">My Account</span>
                                </a>
                            </li>
                            <li class="mr-0.5 md:mr-0 md:mb-0.5">
                                <a class="flex items-center px-2.5 py-2 rounded whitespace-nowrap" href="notifications.html">
                                    <svg class="w-4 h-4 shrink-0 fill-current text-slate-400 mr-2" viewBox="0 0 16 16">
                                        <path d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z" />
                                    </svg>
                                    <span class="text-sm font-medium text-slate-600 hover:text-slate-700">My Notifications</span>
                                </a>
                            </li>
                            <li class="mr-0.5 md:mr-0 md:mb-0.5">
                                <a class="flex items-center px-2.5 py-2 rounded whitespace-nowrap" href="connected-apps.html">
                                    <svg class="w-4 h-4 shrink-0 fill-current text-slate-400 mr-2" viewBox="0 0 16 16">
                                        <path d="M3.414 2L9 7.586V16H7V8.414l-5-5V6H0V1a1 1 0 011-1h5v2H3.414zM15 0a1 1 0 011 1v5h-2V3.414l-3.172 3.172-1.414-1.414L12.586 2H10V0h5z" />
                                    </svg>
                                    <span class="text-sm font-medium text-slate-600 hover:text-slate-700">Connected Apps</span>
                                </a>
                            </li>
                            <li class="mr-0.5 md:mr-0 md:mb-0.5">
                                <a class="flex items-center px-2.5 py-2 rounded whitespace-nowrap" href="plans.html">
                                    <svg class="w-4 h-4 shrink-0 fill-current text-slate-400 mr-2" viewBox="0 0 16 16">
                                        <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z" />
                                    </svg>
                                    <span class="text-sm font-medium text-slate-600 hover:text-slate-700">Plans</span>
                                </a>
                            </li>
                            <li class="mr-0.5 md:mr-0 md:mb-0.5">
                                <a class="flex items-center px-2.5 py-2 rounded whitespace-nowrap" href="billing.html">
                                    <svg class="w-4 h-4 shrink-0 fill-current text-slate-400 mr-2" viewBox="0 0 16 16">
                                        <path d="M15 4c.6 0 1 .4 1 1v10c0 .6-.4 1-1 1H3c-1.7 0-3-1.3-3-3V3c0-1.7 1.3-3 3-3h7c.6 0 1 .4 1 1v3h4zM2 3v1h7V2H3c-.6 0-1 .4-1 1zm12 11V6H2v7c0 .6.4 1 1 1h11zm-3-5h2v2h-2V9z" />
                                    </svg>
                                    <span class="text-sm font-medium text-slate-600 hover:text-slate-700">Billing & Invoices</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Group 2 -->
                    <div>
                        <div class="text-xs font-semibold text-slate-400 uppercase mb-3">Experience</div>
                        <ul class="flex flex-nowrap md:block mr-3 md:mr-0">
                            <li class="mr-0.5 md:mr-0 md:mb-0.5">
                                <a class="flex items-center px-2.5 py-2 rounded whitespace-nowrap" href="feedback.html">
                                    <svg class="w-4 h-4 shrink-0 fill-current text-slate-400 mr-2" viewBox="0 0 16 16">
                                        <path d="M7.001 3h2v4h-2V3zm1 7a1 1 0 110-2 1 1 0 010 2zM15 16a1 1 0 01-.6-.2L10.667 13H1a1 1 0 01-1-1V1a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1zM2 11h9a1 1 0 01.6.2L14 13V2H2v9z" />
                                    </svg>
                                    <span class="text-sm font-medium text-slate-600 hover:text-slate-700">Give Feedback</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Panel -->
                <div class="grow">

                    <!-- Panel body -->
                    <div class="p-6 space-y-6">
                        <h2 class="text-2xl text-slate-800 font-bold mb-5">My Account</h2>

                        <!-- Picture -->
                        <section>
                            <div class="flex items-center">
                                <div class="mr-4">
                                    <img class="w-20 h-20 rounded-full" src="./images/user-avatar-80.png" width="80" height="80" alt="User upload" />
                                </div>
                                <button class="btn-sm bg-indigo-500 hover:bg-indigo-600 text-white">Change</button>
                            </div>
                        </section>

                        <!-- Business Profile -->
                        <section>
                            <h3 class="text-xl leading-snug text-slate-800 font-bold mb-1">Business Profile</h3>
                            <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</div>
                            <div class="sm:flex sm:items-center space-y-4 sm:space-y-0 sm:space-x-4 mt-5">
                                <div class="sm:w-1/3">
                                    <label class="block text-sm font-medium mb-1" for="name">Business Name</label>
                                    <input id="name" class="form-input w-full" type="text" value="Acme Inc." />
                                </div>
                                <div class="sm:w-1/3">
                                    <label class="block text-sm font-medium mb-1" for="business-id">Business ID</label>
                                    <input id="business-id" class="form-input w-full" type="text" value="Kz4tSEqtUmA" />
                                </div>
                                <div class="sm:w-1/3">
                                    <label class="block text-sm font-medium mb-1" for="location">Location</label>
                                    <input id="location" class="form-input w-full" type="text" value="London, UK" />
                                </div>
                            </div>
                        </section>

                        <!-- Email -->
                        <section>
                            <h3 class="text-xl leading-snug text-slate-800 font-bold mb-1">Email</h3>
                            <div class="text-sm">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                            <div class="flex flex-wrap mt-5">
                                <div class="mr-2">
                                    <label class="sr-only" for="email">Business email</label>
                                    <input id="email" class="form-input" type="email" value="admin@acmeinc.com" />
                                </div>
                                <button class="btn border-slate-200 hover:border-slate-300 shadow-sm text-indigo-500">Change</button>
                            </div>
                        </section>

                        <!-- Password -->
                        <section>
                            <h3 class="text-xl leading-snug text-slate-800 font-bold mb-1">Password</h3>
                            <div class="text-sm">You can set a permanent password if you don't want to use temporary login codes.</div>
                            <div class="mt-5">
                                <button class="btn border-slate-200 shadow-sm text-indigo-500">Set New Password</button>
                            </div>
                        </section>

                        <!-- Smart Sync -->
                        <section>
                            <h3 class="text-xl leading-snug text-slate-800 font-bold mb-1">Smart Sync update for Mac</h3>
                            <div class="flex items-center mt-5" x-data="{ checked: true }">
                                <div class="form-switch">
                                    <input type="checkbox" id="toggle" class="sr-only" x-model="checked" />
                                    <label class="bg-slate-400" for="toggle">
                                        <span class="bg-white shadow-sm" aria-hidden="true"></span>
                                        <span class="sr-only">Enable smart sync</span>
                                    </label>
                                </div>
                                <div class="text-sm text-slate-400 italic ml-2" x-text="checked ? 'On' : 'Off'"></div>
                            </div>
                        </section>
                    </div>

                    <!-- Panel footer -->
                    <footer>
                        <div class="flex flex-col px-6 py-5 border-t border-slate-200">
                            <div class="flex self-end">
                                <button class="btn border-slate-200 hover:border-slate-300 text-slate-600">Cancel</button>
                                <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white ml-3">Save Changes</button>
                            </div>
                        </div>
                    </footer>

                </div>

            </div>
        </div>

    </div>

</x-app-layout>