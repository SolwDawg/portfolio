<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    socials: Object,
});
</script>
<template>
    <Head title="Socials" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Socials
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link
                        href="/socials/create"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md"
                        >New Social Link</Link
                    >
                </div>

                <div class="relative overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                        >
                            <tr>
                                <th scope="col" class="px-6 py-3">ID</th>
                                <th scope="col" class="px-6 py-3">Name</th>
                                <th scope="col" class="px-6 py-3">
                                    Social Link
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Social image
                                </th>
                                <th scope="col" class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="social in socials.data"
                                :key="social.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                    {{ social.id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ social.name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ social.social_url }}
                                </td>
                                <td
                                    class="px-6 py-4"
                                    v-html="social.icon_svg"
                                ></td>
                                <td class="px-6 py-4">
                                    <Link
                                        :href="route('socials.edit', social.id)"
                                        class="font-medium text-blue-500 hover:text-blue-700 mr-4"
                                    >
                                        Edit
                                    </Link>
                                    <Link
                                        :href="
                                            route('socials.destroy', social.id)
                                        "
                                        method="delete"
                                        as="button"
                                        type="button"
                                        class="font-medium text-red-500 hover:text-red-700 mr-2"
                                    >
                                        Delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
