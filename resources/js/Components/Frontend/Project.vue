<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    project: Object,
});
</script>

<template>
    <Link
        :href="project.project_url"
        class="group flex flex-col items-center text-center cursor-pointer"
        v-motion
        :initial="{
            opacity: 0,
            y: 100,
        }"
        :enter="{
            opacity: 1,
            y: 0,
        }"
    >
        <div class="mb-6">
            <img
                class="h-56 rounded-2xl"
                :src="project.image"
                :alt="project.name"
            />
        </div>
        <span
            class="mb-3 capitalize text-accent text-sm group-hover:text-light-tail-500"
        >
            {{ project.skill.name }}
        </span>
        <h3
            class="mb-3 text-2xl font-semibold capitalize group-hover:text-light-tail-500"
        >
            {{ project.name }}
        </h3>
    </Link>
</template>
