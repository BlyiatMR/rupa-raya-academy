<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, usePage} from '@inertiajs/vue3';

const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
const page = usePage()
const form = useForm({
    title: page.props.course.title,
    type: page.props.course.type,
    start_date: page.props.course.start_date,
    price: page.props.course.price,
    description: page.props.course.description,
});
const submit = () => {
    try {
        form.post(route('course.update', page.props.course.id))
    } catch (error) {
        console.error(error)
    }
}
</script>

<template>
    <Head title="Dashboard" />

        <template>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Course
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        <h3 class="text-3xl mb-3">
                            <b>Edit Kelas</b>
                        </h3>
                        

                        <form @submit.prevent="submit" class="bg-red-200 mt-2 p-4">
                            <div class="mb-4">
                                <label for="title">title</label>
                                <input class="w-full" name="title" id="title" type="text" v-model="form.title">
                            </div>

                            <div class="mb-4">
                                <label for="type">type</label>
                                <input class="w-full" name="type" id="type" type="text" v-model="form.type">
                            </div>

                            <div class="mb-4">
                                <label for="start_date">start_date</label>
                                <input class="w-full" name="start_date" id="start_date" type="text" v-model="form.start_date">
                            </div>

                            <div class="mb-4">
                                <label for="price">price</label>
                                <input class="w-full" name="price" id="price" type="text" v-model="form.price">
                            </div>

                            <div class="mb-4">
                                <label for="description">description</label>
                                <textarea class="w-full" rows="10" name="description" id="description" v-model="form.description">{{$page.props.course.description}}</textarea>
                            </div>

                            <button class="py-1 px-3 bg-gray-200 rounded">Done</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
</template>
