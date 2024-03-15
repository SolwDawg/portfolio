<script setup>
defineProps({
    socials: Object,
});
</script>
<template>
    <section
        id="home"
        class="flex lg:h-[100vh] items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden"
    >
        <div
            class="container mx-auto h-full xl:mx-20"
            v-motion
            :initial="{ opacity: 0, y: 100 }"
            :visible="{ opacity: 1, y: 0 }"
        >
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">
                        Hey, I'm Son, a
                    </p>
                    <h1
                        class="text-3xl leading-[44px] md:text-4xl md:leading-tight lg:text-6xl lg:leading-[1.2] font-bold md:tracking-[-2px]"
                    >
                        Back-end Developer
                    </h1>
                    <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg">
                        I am the one who builds and maintains the mechanisms
                        that process data and perform operations on the website.
                    </p>
                    <a
                        href="http://127.0.0.1:8000/portfolio/Đặng Thái Sơn - CV_PHP_INTERNSHIP.pdf"
                        download="portfolio"
                        class="btn btn-md bg-accent hover:bg-light-secondary hover:text-light-tail-500 dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100 md:btn-lg transition-all"
                    >
                        My CV
                    </a>
                    <div class="pt-8">
                        <h5
                            class="text-lg flex items-center text-black dark:text-white mb-2"
                        >
                            Follow me on
                        </h5>
                        <div class="flex items-center mb-6">
                            <span
                                v-for="social in socials.data"
                                :key="social.id"
                            >
                                <a
                                    class="w-12 h-12 flex items-center justify-center mr-3 sm:mr-4"
                                    :href="social.social_url"
                                    v-html="social.icon_svg"
                                >
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0"
                >
                    <img
                        class="rounded-lg"
                        src="http://127.0.0.1:8000/img/hero.png"
                        alt="Hero"
                    />
                </div>
            </div>
        </div>
    </section>
</template>
