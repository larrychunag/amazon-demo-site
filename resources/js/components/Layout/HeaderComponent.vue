<template>
    <div
        class="w-full h-[32rem] bg-cover bg-center bg-[url('/images/header-img.jpg')]"
    >
        <nav
            class="bg-white opacity-50 border-white px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800"
        >
            <div
                class="container flex flex-wrap justify-between items-center mx-auto"
            >
                <button
                    data-collapse-toggle="mobile-menu"
                    type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <svg
                        class="hidden w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <div class="w-full md:block md:w-auto" id="mobile-menu">
                    <ul
                        class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium"
                    >
                        <li>
                            <a
                                href="#"
                                class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 no-underline"
                                aria-current="page"
                                >Home</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 no-underline"
                                aria-current="page"
                                >コーヒー豆</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 no-underline"
                                >コーヒー器具</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 no-underline"
                                aria-current="page"
                                >Cart</a
                            >
                        </li>
                        <li>
                            <a
                                href="/login"
                                class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 no-underline"
                                aria-current="page"
                                >ログイン</a
                            >
                        </li>
                        <li>
                            <a
                                href="/register"
                                class="block py-2 pr-4 pl-3 text-black border-b border-gray-100 no-underline"
                                aria-current="page"
                                >新規登録</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {};
</script>

<style scoped></style>
