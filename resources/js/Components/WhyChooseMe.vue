<script>
export default {
  data() {
    return {
      benefits: [
        {
          title: "Fasilitas Komputer",
          description: "Peserta yang mengikuti kelas Offline mendapatkan Fasilitas Komputer",
          iconViewBox: "0 0 24 24",
          icon: `<path fill="white" d="M2 5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2h-7v2h3a1 1 0 1 1 0 2H8a1 1 0 1 1 0-2h3v-2H4a2 2 0 0 1-2-2zm18 11V5H4v11z"/>`,
          backgroundIcon: `<path fill="white" d="M2 5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2h-7v2h3a1 1 0 1 1 0 2H8a1 1 0 1 1 0-2h3v-2H4a2 2 0 0 1-2-2zm18 11V5H4v11z"/>`,
        },
        {
          title: "Project Freelance",
          description: "Project freelance dari PT. Rupa Raya Indonesia",
          iconViewBox: "0 0 16 16",
          icon: `<path fill="white" d="M4.75 7a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5zM5 4.75A.75.75 0 0 1 5.75 4h5.5a.75.75 0 0 1 0 1.5h-5.5A.75.75 0 0 1 5 4.75M6.75 10a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5z"/><path fill="white" d="M0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0 1 14.25 16H1.75A1.75 1.75 0 0 1 0 14.25Zm1.75-.25a.25.25 0 0 0-.25.25v12.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25V1.75a.25.25 0 0 0-.25-.25Z"/>`,
          backgroundIcon: `<path fill="white" d="M4.75 7a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5zM5 4.75A.75.75 0 0 1 5.75 4h5.5a.75.75 0 0 1 0 1.5h-5.5A.75.75 0 0 1 5 4.75M6.75 10a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5z"/><path fill="white" d="M0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0 1 14.25 16H1.75A1.75 1.75 0 0 1 0 14.25Zm1.75-.25a.25.25 0 0 0-.25.25v12.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25V1.75a.25.25 0 0 0-.25-.25Z"/>`,
        },
        {
          title: "Sertifikat Kelas",
          description: "Dapatkan sertifikat untuk meningkatkan portofolio profesional Anda",
          iconViewBox: "0 0 256 256",
          icon: `<path class="fill-white" d="M128 136a8 8 0 0 1-8 8H72a8 8 0 0 1 0-16h48a8 8 0 0 1 8 8m-8-40H72a8 8 0 0 0 0 16h48a8 8 0 0 0 0-16m112 65.47V224a8 8 0 0 1-12 7l-24-13.74L172 231a8 8 0 0 1-12-7v-24H40a16 16 0 0 1-16-16V56a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16v30.53a51.88 51.88 0 0 1 0 74.94M160 184v-22.53A52 52 0 0 1 216 76V56H40v128Zm56-12a51.88 51.88 0 0 1-40 0v38.22l16-9.16a8 8 0 0 1 7.94 0l16 9.16Zm16-48a36 36 0 1 0-36 36a36 36 0 0 0 36-36"/>`,
          backgroundIcon: `<path class="fill-white" d="M128 136a8 8 0 0 1-8 8H72a8 8 0 0 1 0-16h48a8 8 0 0 1 8 8m-8-40H72a8 8 0 0 0 0 16h48a8 8 0 0 0 0-16m112 65.47V224a8 8 0 0 1-12 7l-24-13.74L172 231a8 8 0 0 1-12-7v-24H40a16 16 0 0 1-16-16V56a16 16 0 0 1 16-16h176a16 16 0 0 1 16 16v30.53a51.88 51.88 0 0 1 0 74.94M160 184v-22.53A52 52 0 0 1 216 76V56H40v128Zm56-12a51.88 51.88 0 0 1-40 0v38.22l16-9.16a8 8 0 0 1 7.94 0l16 9.16Zm16-48a36 36 0 1 0-36 36a36 36 0 0 0 36-36"/>`,
        },
      ],
      collaborations: [
        {
          title: "Corporate Training",
          description: "Menawarkan kursus pelatihan khusus sesuai kebutuhan spesifik instansi, seperti pelatihan hard skill (Blender, Photoshop, Canva, dll)",
          iconViewBox: "0 0 48 48",
          icon: `<path class="fill-white" fill-rule="evenodd" d="M6 6h31v5h-2V8H8v23h21.387v2H6zm30 13a3 3 0 1 0 0-6a3 3 0 0 0 0 6m2.031 2.01c1.299 0 2.327.584 3 1.486c.629.845.895 1.89.955 2.855a7.6 7.6 0 0 1-.397 2.92c-.3.87-.807 1.77-1.589 2.387V40.5a1.5 1.5 0 0 1-2.98.247L35.73 33h-.298l-1.458 7.776A1.5 1.5 0 0 1 31 40.5V26.233a63 63 0 0 0-.592.919l-.078.123l-.02.032l-.005.009a1.5 1.5 0 0 1-1.274.707h-5a1.5 1.5 0 1 1 0-3h4.177c.243-.376.563-.864.899-1.354c.35-.511.736-1.052 1.08-1.476c.167-.207.354-.423.542-.6c.092-.087.22-.2.376-.3a1.7 1.7 0 0 1 .926-.282z" clip-rule="evenodd"/>`,
          backgroundIcon: `<path class="fill-white" fill-rule="evenodd" d="M6 6h31v5h-2V8H8v23h21.387v2H6zm30 13a3 3 0 1 0 0-6a3 3 0 0 0 0 6m2.031 2.01c1.299 0 2.327.584 3 1.486c.629.845.895 1.89.955 2.855a7.6 7.6 0 0 1-.397 2.92c-.3.87-.807 1.77-1.589 2.387V40.5a1.5 1.5 0 0 1-2.98.247L35.73 33h-.298l-1.458 7.776A1.5 1.5 0 0 1 31 40.5V26.233a63 63 0 0 0-.592.919l-.078.123l-.02.032l-.005.009a1.5 1.5 0 0 1-1.274.707h-5a1.5 1.5 0 1 1 0-3h4.177c.243-.376.563-.864.899-1.354c.35-.511.736-1.052 1.08-1.476c.167-.207.354-.423.542-.6c.092-.087.22-.2.376-.3a1.7 1.7 0 0 1 .926-.282z" clip-rule="evenodd"/>`,
        },
        {
          title: "Project Collaboration",
          description: "Menawarkan layanan khusus seperti pembuatan 3D modeling atau rendering untuk instansi yang membutuhkan dengan harga khusus",
          iconViewBox: "0 0 48 48",
          icon: `<path class="fill-white" d="M6 21v-1H4v1a7 7 0 0 0 7 7h3v-2h-3a5 5 0 0 1-5-5m18-10v1h2v-1a7 7 0 0 0-7-7h-3v2h3a5 5 0 0 1 5 5m-13 0H5a3 3 0 0 0-3 3v2h2v-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2h2v-2a3 3 0 0 0-3-3m-3-1a4 4 0 1 0-4-4a4 4 0 0 0 4 4m0-6a2 2 0 1 1-2 2a2 2 0 0 1 2-2m19 21h-6a3 3 0 0 0-3 3v2h2v-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2h2v-2a3 3 0 0 0-3-3m-7-5a4 4 0 1 0 4-4a4 4 0 0 0-4 4m6 0a2 2 0 1 1-2-2a2 2 0 0 1 2 2"/>`,
          backgroundIcon: `<path class="fill-white" d="M6 21v-1H4v1a7 7 0 0 0 7 7h3v-2h-3a5 5 0 0 1-5-5m18-10v1h2v-1a7 7 0 0 0-7-7h-3v2h3a5 5 0 0 1 5 5m-13 0H5a3 3 0 0 0-3 3v2h2v-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2h2v-2a3 3 0 0 0-3-3m-3-1a4 4 0 1 0-4-4a4 4 0 0 0 4 4m0-6a2 2 0 1 1-2 2a2 2 0 0 1 2-2m19 21h-6a3 3 0 0 0-3 3v2h2v-2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2h2v-2a3 3 0 0 0-3-3m-7-5a4 4 0 1 0 4-4a4 4 0 0 0-4 4m6 0a2 2 0 1 1-2-2a2 2 0 0 1 2 2"/>`,
        }
      ]
    };
  },
};
</script>

<template>
    <section>
        <div class="max-w-[1440px] sm:mx-auto py-10 mx-5">
            <div class="max-w-5xl mx-auto">
                <h1 class="sm:text-5xl text-3xl leading-snug font-extrabold text-center mb-2 dark:bg-gradient-to-r dark:from-gray-500 dark:via-white dark:to-gray-500 bg-gradient-to-r from-gray-500 via-slate-800 to-gray-500 bg-clip-text text-transparent">Mengapa Memilih Kami?</h1>
            </div>
            <div class="flex justify-center justify-items-stretch mt-10 gap-10 flex-wrap">
                <div v-for="(benefit, index) in benefits" :key="index" class="w-[348px] relative overflow-hidden dark:bg-blue-600 bg-blue-500 px-5 py-6 rounded-xl shadow-2xl shadow-gray-400 dark:shadow-blue-950 hover:-translate-y-2 duration-300">

                    <svg class="absolute -top-4 -right-14 opacity-10 rotate-12 w-64" xmlns="http://www.w3.org/2000/svg" :viewBox="benefit.iconViewBox" v-html="benefit.backgroundIcon"></svg>

                    <div class="mb-4">
                        <svg class="w-10" xmlns="http://www.w3.org/2000/svg" :viewBox="benefit.iconViewBox" v-html="benefit.icon"></svg>
                    </div>
                    <h1 class="text-xl font-semibold text-white tracking-wide mb-1">{{ benefit.title }}</h1>
                    <div class="flex gap-x-2">
                        <p class="text-white">{{ benefit.description }}</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center justify-items-stretch gap-10 flex-wrap max-lg:mt-10">
                <div v-for="(collaboration, index) in collaborations" :key="index" class="w-[542px] max-[1124px]:w-[348px] relative overflow-hidden dark:bg-blue-600 bg-blue-500 px-5 py-6 rounded-xl shadow-2xl shadow-gray-400 dark:shadow-blue-950 hover:-translate-y-2 duration-300 lg:mt-10 mt-0">

                    <svg class="absolute -top-4 -right-14 opacity-10 rotate-12 w-64" xmlns="http://www.w3.org/2000/svg" :viewBox="collaboration.iconViewBox" v-html="collaboration.backgroundIcon"></svg>

                    <div class="mb-4">
                        <svg class="w-10" xmlns="http://www.w3.org/2000/svg" :viewBox="collaboration.iconViewBox" v-html="collaboration.icon"></svg>
                    </div>
                    <div class="self-start leading-none text-black">
                        <h2 class="text-white font-semibold text-xl">{{ collaboration.title }}</h2>
                    </div>
                    <p class="mt-1 text-base font-normal max-md:max-w-full text-white">
                        {{ collaboration.description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>