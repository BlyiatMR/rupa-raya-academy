<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Class - Detail" />

        <template>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Detail Kelas
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
                            <Link class="py-1 px-3 bg-gray-300 rounded" :href="route('course.index')">Kembali</Link>
                        </p>

                        <div class="">
                            <div class="">
                                <h2>Id : <br>{{$page.props.course.id}}</h2>
                                <br>
                                <h2>Slug : <br>{{$page.props.course.slug}}</h2>
                                <br>
                                <h2>Judul : <br>{{$page.props.course.title}}</h2>
                                <br>
                                <h2>Pada Tanggal : <br>{{$page.props.course.start_date}} - {{$page.props.course.end_date}}</h2>
                                <br>
                                <div>
                                    <h2>File : <br>{{$page.props.course.banner_img}}</h2>
                                    <img :src="'/storage/'+$page.props.course.banner_img" alt="" width="400" height="275">
                                </div>
                                <br>
                                <h2>Harga : <br>{{$page.props.course.price}}</h2>
                                <br>
                                <h2>Harga Akhir : <br>{{$page.props.course.last_price}}</h2>
                                <br>
                                <h2>Tools : <br>{{$page.props.course.tools}}</h2>
                                <br>
                                <h2>Lokasi : <br>{{$page.props.course.location}}</h2>
                                <br>
                                <h2>Fasilitas : <br>{{$page.props.course.facility}}</h2>
                                <br>
                                <h2>Keuntungan/Benefit: <br>{{$page.props.course.benefit}}</h2>
                                <br>
                                <h2>Kali Pertemuan : <br>{{$page.props.course.times_of_meeting}}</h2>
                                <h2>Kali Pertemuan : <br>{{$page.props.course.duration_of_meeting}}</h2>
                                <br>
                                <div>
                                    <h2>Jadwal Meeting : <br>{{$page.props.course.schedule_img}}</h2>
                                    <img v-if="$page.props.course.schedule_img" :src="'/storage/'+$page.props.course.photos1" alt="" width="500" height="275">
                                    <p v-else>No Photos Uploaded</p>
                                </div>
                                <br>
                                <div class="customHtml">
                                    Deskripsi : <br>
                                    <div v-html="$page.props.course.description"></div>
                                </div>
                                <br>
                                <div class="flex flex-wrap bg-gray-400 py-2 px-4">
                                    <div class="flex-[0_0_50%] px-4">
                                        <h2>Foto 1 : <br>{{$page.props.course.photos1}}</h2>
                                        <img v-if="$page.props.course.photos1" :src="'/storage/'+$page.props.course.photos1" alt="" width="100%" height="275">
                                        <p v-else>No Photos Uploaded</p>
                                    </div>
                                    <div class="flex-[0_0_50%] px-4">
                                        <h2>Foto 2 : <br>{{$page.props.course.photos2}}</h2>
                                        <img v-if="$page.props.course.photos2" :src="'/storage/'+$page.props.course.photos2" alt="" width="100%" height="275">
                                        <p v-else>No Photos Uploaded</p>
                                    </div>
                                    <div class="flex-[0_0_50%] px-4">
                                        <h2>Foto 2 : <br>{{$page.props.course.photos2}}</h2>
                                        <img v-if="$page.props.course.photos2" :src="'/storage/'+$page.props.course.photos2" alt="" width="100%" height="275">
                                        <p v-else>No Photos Uploaded</p>
                                    </div>
                                    <div class="flex-[0_0_50%] px-4">
                                        <h2>Foto 4 : <br>{{$page.props.course.photos4}}</h2>
                                        <img v-if="$page.props.course.photos4" :src="'/storage/'+$page.props.course.photos4" alt="" width="100%" height="275">
                                        <p v-else>No Photos Uploaded</p>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    Link Regist : <br>
                                    <a :href="$page.props.course.registration_link" class="text-blue-600 underline">{{ $page.props.course.registration_link }}</a>
                                </div>
                                <br>
                                <p>Id Mentor : <br>{{$page.props.course.mentor.id}}</p>
                                <br>
                                <p>Nama Mentor : <br>{{$page.props.course.mentor.name}}</p>
                                <br>
                                <div>Profil Mentor :
                                    <div v-html="$page.props.course.mentor.profile"></div>
                                </div>
                                <br>
                                <div class="">
                                    <h2>Foto Mentor: <br>{{$page.props.course.mentor.profile_img}}</h2>
                                    <img v-if="$page.props.course.mentor.profile_img" :src="'/storage/'+$page.props.course.mentor.profile_img" alt="" width="400" height="275">
                                </div>
                                <br>
                                <p>Kerjaan Mentor : <br>{{$page.props.course.mentor.job}}</p>
                                <br>
                                <p>FB Mentor : <br>{{$page.props.course.mentor.fb_link}}</p>
                                <br>
                                <p>IG Mentor : <br>{{$page.props.course.mentor.ig_link}}</p>
                                <br>
                                <p>TWT Mentor : <br>{{$page.props.course.mentor.twt_link}}</p>
                                <br>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</template>
<style>
.customHtml {
    all: revert;
}
</style>
