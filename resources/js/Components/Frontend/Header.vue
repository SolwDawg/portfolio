<script setup>
import { ref, onMounted } from "vue";
const showMobileMenu = ref("false");
const scrollBg = ref(false);

const navigations = [
    { name: "Home", href: "#home" },
    { name: "About", href: "#about" },
    { name: "Portfolio", href: "#portfolio" },
    { name: "Contact", href: "#contact" },
];

const setScrollBg = (value) => {
    scrollBg.value = value;
};

onMounted(() => {
    window.addEventListener("scroll", () => {
        return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
    });
});
</script>
<template>
    <nav
        class="fixed z-20 w-full border-gray-200"
        :class="{
            'bg-light-primary dark:bg-dark-primary': scrollBg,
            'bg-white dark:bg-slate-800': !scrollBg,
        }"
    >
        <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
        >
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img
                    src="http://127.0.0.1:8000/img/logo-transparent.png"
                    class="h-10"
                    alt="Flowbite Logo"
                />
            </a>
            <button
                @click="showMobileMenu = !showMobileMenu"
                data-collapse-toggle="navbar-default"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default"
                aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 17 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                    />
                </svg>
            </button>
            <div
                class="w-full md:block md:w-auto"
                :class="{ hidden: showMobileMenu }"
                id="navbar-default"
            >
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-light-tail-500 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:border-dark-navy-100"
                    :class="{
                        'bg-light-primary md:bg-light-primary dark:bg-dark-primary md:dark:bg-dark-primary':
                            scrollBg,
                        'bg-white md:bg-white dark:bg-slate-800 md:dark:bg-slate-800':
                            !scrollBg,
                    }"
                >
                    <li v-for="(navigation, index) in navigations" :key="index">
                        <a
                            :href="navigation.href"
                            class="block py-2 px-3 rounded md:p-0 text-light-tail-500 dark:text-dark-navy-100 hover:text-light-tail-100 dark:hover:text-white"
                            aria-current="page"
                        >
                            {{ navigation.name }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
