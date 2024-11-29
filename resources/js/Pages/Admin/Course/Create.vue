<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { reactive, ref, createApp } from 'vue';
import { QuillEditor } from '@vueup/vue-quill'

// const app = createApp()
// app.component('QuillEditor', QuillEditor)

const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
const form = useForm({
    title: '',
    banner: null,

    start_date: '',
    end_date: '',
    times_of_meeting: '',
    duration_of_meeting: '',
    schedule_img: null,

    price: '',
    last_price: '',

    location: '',
    facility: '',
    benefit: '',
    tools: '',
    registration_link: '',

    photos1: null,
    photos2: null,
    photos3: null,
    photos4: null,

    description: '',

    mentor_id: '',
    mentor_name: '',
    mentor_profile: '',
    mentor_profile_img: null,
    mentor_job: '',
    mentor_fb: '',
    mentor_ig: '',
    mentor_twt: '',
});

const submit = () => {
    form.post(route('course.store'), {
        onError: (errors) => {
            // Handle the errors if needed
            console.error(errors);
        }
    });
}

const bannerFile = (event) => {
    if (event.target.files.length > 0) {
        form.banner = event.target.files[0];
        // console.log(event.target.files[0]);
    }
};

const scheduleFile = (event) => {
    if (event.target.files.length > 0) {
        form.schedule_img = event.target.files[0];
        // console.log(event.target.files[0]);
    }
};

const photos1File = (event) => {
    if (event.target.files.length > 0) {
        form.photos1 = event.target.files[0];
        // console.log(event.target.files[0]);
    }
};
const photos2File = (event) => {
    if (event.target.files.length > 0) {
        form.photos2 = event.target.files[0];
        // console.log(event.target.files[0]);
    }
};
const photos3File = (event) => {
    if (event.target.files.length > 0) {
        form.photos3 = event.target.files[0];
        // console.log(event.target.files[0]);
    }
};
const photos4File = (event) => {
    if (event.target.files.length > 0) {
        form.photos4 = event.target.files[0];
        // console.log(event.target.files[0]);
    }
};

const mentorFile = (event) => {
    if (event.target.files.length > 0) {
        form.mentor_profile_img = event.target.files[0];
        // console.log(event.target.files[0]);
    }
};

const logSelectedOption = (value) => {
    console.log('Selected Option:', form.mentor_id);
}
</script>

<style>
input:disabled:hover,
input:disabled:active,
input:disabled:focus,
textarea:disabled:hover,
textarea:disabled:active,
textarea:disabled:focus,
textarea:disabled,
input:disabled {
  background-color: rgb(245, 245, 245);
  border: 1px solid rgba(128, 128, 128, 0.3);
  cursor: not-allowed;
}
 input[type="number"]::-webkit-outer-spin-button,
 input[type="number"]::-webkit-inner-spin-button {
	 -webkit-appearance: none;
	 margin: 0;
 }

 .ql-editor {
    background-color: white;
 }
</style>

<template>
    <Head title="Dashboard" />

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-gradient-to-b from-gray-100 to-gray-200 shadow sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-3xl mb-3"><b>Buat Kelas</b></h3>

                    <form @submit.prevent="submit" enctype="multipart/form-data" class="mt-2 p-4">
                        <input type="hidden" name="_token" :value="csrfToken">

                        <div class="mb-4">
                            <label for="title">Judul *</label>
                            <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.title" name="title" id="title" type="text">
                            <span class="text-red-500 text-xs">{{ form.errors.title }}</span>
                        </div>

                        <div class="mb-4">
                            <label for="banner">Upload Banner *</label>
                            <input class="w-full border-0 rounded-md ring-gray-300" name="banner" id="banner" type="file" @change="bannerFile">
                            <span class="text-red-500 text-xs">{{ form.errors.banner }}</span>
                        </div>

                        <h2 class="text-2xl font-bold mb-3 border-b-2 inline-block">Tanggal</h2>
                        <div class="mb-6 sm:grid grid-cols-6 gap-3 border-b-2 pb-4">
                            <div class="col-span-3">
                                <label for="start_date">Tanggal Mulai *</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.start_date" name="start_date" id="start_date" type="date">
                                <span class="text-red-500 text-xs">{{ form.errors.start_date }}</span>
                            </div>

                            <div class="col-span-3">
                                <label for="end_date">Tanggal Berakhir *</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.end_date" name="end_date" id="end_date" type="date">
                                <span class="text-red-500 text-xs">{{ form.errors.end_date }}</span>
                            </div>

                            <div class="col-span-2">
                                <label for="times_of_meeting">Berapa Kali Pertemuan *</label>
                                <div class="relative rounded-md overflow-hidden">
                                    <input class="w-full border-0 ring-gray-300 pl-16" v-model="form.times_of_meeting" name="times_of_meeting" id="times_of_meeting" type="number">
                                    <div class="absolute top-0 left-0 bg-gray-300 h-full w-14 flex items-center justify-center">X</div>
                                </div>
                                <span class="text-red-500 text-xs">{{ form.errors.times_of_meeting }}</span>
                            </div>

                            <div class="col-span-2">
                                <label for="duration_of_meeting">Durasi Pertemuan *</label>
                                <div class="relative rounded-md overflow-hidden">
                                    <input class="w-full border-0 ring-gray-300 pl-16" v-model="form.duration_of_meeting" name="duration_of_meeting" id="duration_of_meeting" type="number">
                                    <div class="absolute top-0 left-0 bg-gray-300 h-full w-14 flex items-center justify-center">Jam</div>
                                </div>
                                <span class="text-red-500 text-xs">{{ form.errors.duration_of_meeting }}</span>
                            </div>

                            <div class="col-span-2">
                                <label for="schedule_img">Gambar Jadwal Pertemuan *</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" name="schedule_img" id="schedule_img" type="file" @change="scheduleFile">
                                <span class="text-red-500 text-xs">{{ form.errors.schedule_img }}</span>
                            </div>
                        </div>

                        <h2 class="text-2xl font-bold mb-3 border-b-2 inline-block">Harga</h2>
                        <div class="mb-6 sm:grid grid-cols-2 items-end gap-x-3 border-b-2 pb-4">
                            <div class="grid-rows-subgrid">
                                <label for="price">Harga awal</label>
                                <small class="ml-1 opacity-60 font-semibold text-[10px]">akan menjadi Free jika kosong</small>
                                <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.price" name="price" id="price" type="text">
                                <span class="text-red-500 text-xs">{{ form.errors.price }}</span>
                            </div>

                            <div class="grid-rows-subgrid">
                                <label for="last_price">Harga akhir setelah potongan</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.last_price" name="last_price" id="last_price" type="text" :disabled="form.price == ''">
                                <span class="text-red-500 text-xs">{{ form.errors.last_price }}</span>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="location">Lokasi</label>
                            <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.location" name="location" id="location" type="text">
                            <span class="text-red-500 text-xs">{{ form.errors.location }}</span>
                        </div>

                        <div class="mb-4">
                            <label for="facility">Fasilitas</label>
                            <small class="ml-1 opacity-60 font-semibold text-[10px]">pakai koma (,) untuk memasukkan lebih dari satu</small>
                            <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.facility" name="facility" id="facility" type="text">
                            <span class="text-red-500 text-xs">{{ form.errors.facility }}</span>
                        </div>

                        <div class="mb-4">
                            <label for="benefit">Benefit</label>
                            <small class="ml-1 opacity-60 font-semibold text-[10px]">pakai koma (,) untuk memasukkan lebih dari satu</small>
                            <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.benefit" name="benefit" id="benefit" type="text">
                            <span class="text-red-500 text-xs">{{ form.errors.benefit }}</span>
                        </div>

                        <div class="mb-4">
                            <label for="tools">Tools</label>
                            <small class="ml-1 opacity-60 font-semibold text-[10px]">pakai koma (,) untuk memasukkan lebih dari satu</small>
                            <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.tools" name="tools" id="tools" type="text">
                            <span class="text-red-500 text-xs">{{ form.errors.tools }}</span>
                        </div>

                        <div class="mb-4">
                            <label for="registration_link">Link Pendaftaran</label>
                            <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.registration_link" name="registration_link" id="registration_link" type="text">
                            <span class="text-red-500 text-xs">{{ form.errors.registration_link }}</span>
                        </div>

                        <div class="mb-6 sm:grid grid-cols-2 items-end gap-x-3 border-b-2 pb-4">
                            <div class="mb-4">
                                <label for="photos1">Upload Suasana Kelas 1 *</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" name="photos1" id="photos1" type="file" @change="photos1File">
                                <span class="text-red-500 text-xs">{{ form.errors.photos1 }}</span>
                            </div>
                            <div class="mb-4">
                                <label for="photos2">Upload Suasana Kelas 2 *</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" name="photos2" id="photos2" type="file" @change="photos2File">
                                <span class="text-red-500 text-xs">{{ form.errors.photos2 }}</span>
                            </div>
                            <div class="mb-4">
                                <label for="photos3">Upload Suasana Kelas 3 *</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" name="photos3" id="photos3" type="file" @change="photos3File">
                                <span class="text-red-500 text-xs">{{ form.errors.photos3 }}</span>
                            </div>
                            <div class="mb-4">
                                <label for="photos4">Upload Suasana Kelas 4 *</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" name="photos4" id="photos4" type="file" @change="photos4File">
                                <span class="text-red-500 text-xs">{{ form.errors.photos4 }}</span>
                            </div>
                        </div>

                        <div class="mb-12">
                            <label for="description">Deskripsi *</label>
                            <!--<textarea class="w-full border-0 rounded-md ring-gray-300" rows="10" v-model="form.description" name="description" id="description"></textarea>-->
                            <QuillEditor theme="snow"
                                         :toolbar="[['bold', 'italic'], [{ 'header': 1 }], [{ 'list': 'ordered'}, { 'list': 'bullet' }]]"
                                         v-model:content="form.description"
                                         style="height: 220px;"
                                         contentType="html" name="description" id="description" />
                            <span class="text-red-500 text-xs">{{ form.errors.description }}</span>
                        </div>

                        <h2 class="text-2xl font-bold mb-2 border-b-2 inline-block">Pilih Mentor</h2>
                        <div class="sm:col-span-3 mb-4">
                            <label for="mentor_id">Mentor :</label>
                            <div>

                                <select id="mentor_id" v-model="form.mentor_id" @change="logSelectedOption($event)" name="mentor_id" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm">
                                    <option value=""></option>
                                    <option v-for="(item, index) in $page.props.mentor" :key="index" :value="item.id">
                                        {{ item.name }}
                                    </option>
                                </select>
                                <span class="mt-2 text-rose-500 text-xs">{{ form.errors.mentor_id }}</span>
                            </div>
                        </div>

                        <small>Masukkan form ini jika mentor tidak terdapat dipilihan atas</small>
                        <div class="mb-4">
                            <label for="mentor_name">Nama Mentor</label>
                            <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.mentor_name" name="mentor_name" id="mentor_name" type="text" :disabled="form.mentor_id != ''">
                            <span class="text-red-500 text-xs">{{ form.errors.mentor_name }}</span>
                        </div>

                        <div class="mb-4">
                            <label for="mentor_profile">Profil Mentor</label>
                            <!--<textarea class="w-full border-0 rounded-md ring-gray-300" rows="10" v-model="form.mentor_profile" name="mentor_profile" id="mentor_profile" :disabled="form.mentor_id != ''"></textarea>-->

                            <QuillEditor theme="snow"
                                            :toolbar="[['bold', 'italic'], [{ 'header': 1 }], [{ 'list': 'ordered'}, { 'list': 'bullet' }]]"
                                            v-model:content="form.mentor_profile"
                                            style="height: 220px;"
                                            contentType="html" name="mentor_profile" id="mentor_profile" />
                            <span class="text-red-500 text-xs">{{ form.errors.mentor_profile }}</span>
                        </div>

                        <div class="mb-4">
                            <label for="mentor_profile_img">Upload Foto Mentor</label>
                            <input class="w-full border-0 rounded-md ring-gray-300" name="mentor_profile_img" id="mentor_profile_img" type="file" @change="mentorFile">
                            <span class="text-red-500 text-xs">{{ form.errors.mentor_profile_img }}</span>
                        </div>

                        <div class="mb-8">
                            <label for="mentor_job">Pekerjaan Mentor</label>
                            <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.mentor_job" name="mentor_job" id="mentor_job" type="text" :disabled="form.mentor_id != ''">
                            <span class="text-red-500 text-xs">{{ form.errors.mentor_job }}</span>
                        </div>
                        <div class="grid grid-cols-3 gap-3">
                            <div class="mb-8">
                                <label for="mentor_fb">Link Facebook Mentor</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.mentor_fb" name="mentor_fb" id="mentor_fb" type="text" :disabled="form.mentor_id != ''">
                                <span class="text-red-500 text-xs">{{ form.errors.mentor_fb }}</span>
                            </div>
                            <div class="mb-8">
                                <label for="mentor_ig">Link Instagram Mentor</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.mentor_ig" name="mentor_ig" id="mentor_ig" type="text" :disabled="form.mentor_id != ''">
                                <span class="text-red-500 text-xs">{{ form.errors.mentor_ig }}</span>
                            </div>
                            <div class="mb-8">
                                <label for="mentor_twt">Link Twitter Mentor</label>
                                <input class="w-full border-0 rounded-md ring-gray-300" v-model="form.mentor_twt" name="mentor_twt" id="mentor_twt" type="text" :disabled="form.mentor_id != ''">
                                <span class="text-red-500 text-xs">{{ form.errors.mentor_twt }}</span>
                            </div>
                        </div>
                        <button type="submit" class="py-1 px-3 bg-gray-300 hover:bg-gray-400 duration-100 rounded">Done</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>
