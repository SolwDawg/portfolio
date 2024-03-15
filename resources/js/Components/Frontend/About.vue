<template>
    <section
        id="about"
        class="section bg-light-secondary dark:bg-dark-secondary"
    >
        <div
            class="container mx-auto"
            v-motion
            :initial="{ opacity: 0, y: 100 }"
            :visible="{ opacity: 1, y: 0 }"
        >
            <div class="flex flex-col xl:flex-row gap-24">
                <img
                    class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
                    src="http://127.0.0.1:8000/img/about.jpeg"
                    alt="about"
                />
                <div
                    class="flex flex-col items-center text-center lg:items-start lg:text-left"
                >
                    <div class="flex flex-col">
                        <h2
                            class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3"
                        >
                            About me
                        </h2>
                        <p class="mb-4 text-accent">Back-end web developer</p>
                        <hr class="mb-8 opacity-90 dark:opacity-5" />
                        <p class="mb-8">
                            As a backend developer, I specialize in building
                            scalable server-side applications using languages
                            like PHP. Proficient in frameworks like Laravel, I
                            craft RESTful APIs and integrate with databases such
                            as MySQL or MongoDB. Explore my GitHub for examples
                            of my work and contributions to open-source
                            projects.
                        </p>
                    </div>
                    <a
                        href="http://127.0.0.1:8000/portfolio/Đặng Thái Sơn - CV_PHP_INTERNSHIP.pdf"
                        download="portfolio"
                        class="btn btn-md bg-accent text-light-tail-100"
                        >My CV</a
                    >
                </div>
            </div>
        </div>
    </section>
</template>
