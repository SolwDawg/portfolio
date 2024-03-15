<template>
    <section class="section bg-light-secondary dark:bg-dark-secondary">
        <div
            class="container mx-auto"
            v-motion
            :initial="{
                opacity: 0,
                y: 100,
            }"
            :visible="{
                opacity: 1,
                y: 0,
            }"
        >
            <div class="flex flex-col items-center text-center">
                <h2 class="">What I do for clients</h2>
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Mollitia autem laudantium recusandae reiciendis
                </p>
                <a
                    href="#contact"
                    class="btn btn-md bg-accent text-light-tail-100"
                    >Contact me</a
                >
            </div>
        </div>
    </section>
</template>
