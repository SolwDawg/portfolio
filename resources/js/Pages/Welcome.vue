<script setup>
import { Head, Link } from "@inertiajs/vue3";
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import About from "@/Components/Frontend/About.vue";
import Skills from "@/Components/Frontend/Skills.vue";
import Portfolio from "@/Components/Frontend/Portfolio.vue";
import ContactMe from "@/Components/Frontend/ContactMe.vue";

defineProps({
    skills: Object,
    projects: Object,
    socials: Object,
});
</script>

<template>
    <Head title="Portfolio" />
    <FrontendLayout>
        <!-- Hero primary -->
        <Hero :socials="socials" />
        <!-- About secondary -->
        <About />
        <!-- Skills tail-100  -->
        <Skills :skills="skills" />
        <!-- Portfolio primary -->
        <Portfolio :skills="skills" :projects="projects" />
        <!-- Contact primary -->
        <ContactMe />
    </FrontendLayout>
</template>
