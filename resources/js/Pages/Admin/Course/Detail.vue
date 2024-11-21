<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

        <template>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Detail Class
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-gray-100 shadow sm:rounded-lg"
                >

                    <div class="p-6 text-gray-900">
                        <h3 class="text-3xl mb-3">
                            <b>Kelas</b>
                        </h3>
                        <p class="mb-3 text-right">
                            <a class="py-1 px-3 bg-gray-300 rounded" href="/class/">Kembali</a>
                        </p>
                        
                        <div class="">
                            <div class="">
                                <h2>Judul : <br>{{$page.props.course.title}}</h2>
                                <br>
                                <h2>Tipe : <br>{{$page.props.course.type}}</h2>
                                <br>
                                <h2>File : <br>{{$page.props.course.banner_img}}</h2>
                                <img :src="'/storage/'+$page.props.course.banner_img" alt="" width="400" height="275">
                                <br>
                                <h2>Tanggal : <br>{{$page.props.course.start_date}}</h2>
                                <br>
                                <h2>Harga : <br>{{$page.props.course.price}}</h2>
                                <br>
                                <div>
                                    Deskripsi : <br>
                                    <div v-html="$page.props.course.description"></div>
                                </div>
                                <br>
                                <br>
                                <p>ID Mentor : <br>{{$page.props.course.mentor.id}}</p>
                                <br>
                                <p>Nama Mentor : <br>{{$page.props.course.mentor.name}}</p>
                                <br>
                                <p>Profil Mentor : <br>{{$page.props.course.mentor.profile}}</p>
                                <br>
                                <p>Kerjaan Mentor : <br>{{$page.props.course.mentor.job}}</p>
                                <br>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</template>
