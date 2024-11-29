<script>
export default {
    data() {
        return {
            testimonials: [
                {
                    text: "Ikut kelas di Rupa Raya Academy sangat luar biasa! Saya senang bisa bertemu teman-teman dan mentor sehingga suasana kelas jadi nyaman.",
                    name: "Ferry Awal",
                    title: "Mahasiswa Universitas Negeri Makassar"
                },
                {
                    text: "Rupa Raya Academy memberikan pelatihan yang luar biasa. Membantu saya menghasilkan karya 3D yang lebih profesional.",
                    name: "Arif Sunandar",
                    title: "Peserta"
                },
                {
                    text: "Rupa Raya Academy memberikan pelatihan yang luar biasa. Membantu saya menghasilkan karya 3D yang lebih profesional.",
                    name: "Arif Sunandar",
                    title: "Peserta"
                },
                {
                    text: "Rupa Raya Academy memberikan pelatihan yang luar biasa. Membantu saya menghasilkan karya 3D yang lebih profesional.",
                    name: "Arif Sunandar",
                    title: "Peserta"
                },
            ]
        };
    }
};
</script>

<template>
    <section class="relative">
        
        <div class="absolute max-sm:hidden left-0 bottom-0 w-96 h-96 dark:bg-yellow-500 bg-blue-500 rounded-full blur-3xl dark:opacity-5 opacity-10"></div>
        <div class="absolute bottom-0 right-72 blur-[80px] dark:opacity-10 opacity-5 w-[29rem] h-[29rem] dark:bg-blue-500 bg-yellow-500 rounded-full"></div>

        <div class="sm:py-20 py-10 max-w-[1440px] sm:mx-auto mx-5">
            <div class="flex flex-wrap justify-center sm:gap-x-20 gap-10">
                <div>
                    <h1 class="dark:bg-gradient-to-r dark:from-gray-500 dark:via-white dark:to-gray-500 bg-gradient-to-r from-gray-500 via-slate-800 to-gray-500 bg-clip-text text-transparent sm:text-5xl text-3xl leading-snug font-extrabold max-lg:text-center mb-3">Kata Peserta Kami</h1>
                    <p class="sm:w-96 w-fit dark:text-gray-300 text-slate-600 tracking-wide max-lg:text-center dark:font-normal font-semibold text-lg">Testimoni dari para peserta yang telah belajar bersama kami menunjukkan dampak nyata dari setiap kursus yang kami tawarkan.</p>
                </div>
                <div class="sm:max-w-[49.5rem] flex flex-wrap justify-center gap-5">
                    <div v-for="(testimonial, index) in testimonials" :key="index" class="relative xl:w-96 max-w-2xl border border-gray-300 dark:border-gray-700 dark:bg-blue-950 dark:bg-opacity-15 rounded-xl py-5 px-10">
                        <p class="dark:text-gray-400 text-slate-600 tracking-wide mb-7 dark:font-normal font-semibold">{{ testimonial.text }}</p>
                        <p class="dark:text-gray-300 text-slate-800 tracking-wide mb-1 font-semibold">{{ testimonial.name }}</p>
                        <p class="dark:text-gray-400 text-slate-600 tracking-wide text-sm">{{ testimonial.title }}</p>
                        <svg class="absolute right-10 bottom-3 w-20 h-20 opacity-20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path class="fill-gray-400" d="M6.848 2.47a1 1 0 0 1-.318 1.378A7.3 7.3 0 0 0 3.75 7.01A3 3 0 1 1 1 10v-.027a4 4 0 0 1 .01-.232c.009-.15.027-.36.062-.618c.07-.513.207-1.22.484-2.014c.552-1.59 1.67-3.555 3.914-4.957a1 1 0 0 1 1.378.318m7 0a1 1 0 0 1-.318 1.378a7.3 7.3 0 0 0-2.78 3.162A3 3 0 1 1 8 10v-.027a4 4 0 0 1 .01-.232c.009-.15.027-.36.062-.618c.07-.513.207-1.22.484-2.014c.552-1.59 1.67-3.555 3.914-4.957a1 1 0 0 1 1.378.318"/></svg>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</template>
