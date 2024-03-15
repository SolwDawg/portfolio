<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";

import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";

defineProps({
    users: Array,
});

const form = useForm({
    name: "",
    icon_svg: "",
    user_id: 1,
    social_url: "",
});

const submit = () => {
    form.post(route("socials.store"));
};

const selected = "1";
</script>
<template>
    <Head title="New Social Link" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                New Social Link
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white rounded-lg">
                <form class="p-4" @submit.prevent="submit">
                    <div hidden>
                        <InputLabel for="user_id" value="User" />
                        <select
                            v-model="form.user_id"
                            id="user_id"
                            name="user_id"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 sm:text-sm rounded-md"
                        >
                            <option
                                v-for="user in users"
                                :key="user.id"
                                :value="user.id"
                                :selected="selected"
                            >
                                {{ user.name }}
                            </option>
                        </select>
                        <InputError
                            class="mt-2"
                            :message="form.errors.user_id"
                        />
                    </div>
                    <div class="mt-3">
                        <InputLabel for="name" value="Name" />

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            autofocus
                            v-model="form.name"
                            autocomplete="username"
                        />

                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                    <div class="mt-3">
                        <InputLabel for="social_url" value="URL" />

                        <TextInput
                            id="social_url"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.social_url"
                            autocomplete="social_url"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.social_url"
                        />
                    </div>
                    <div class="mt-3">
                        <InputLabel for="icon_svg" value="SVG" />

                        <TextInput
                            id="icon_svg"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.icon_svg"
                            autocomplete="icon_svg"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.icon_svg"
                        />
                    </div>
                    <div
                        class="flex justify-center text-center mt-4 pb-2"
                        v-html="form.icon_svg"
                    ></div>
                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton
                            class="ms-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Store
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
