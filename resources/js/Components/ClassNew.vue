<script>
export default {
  data() {
    return {
      classGeneral: [
        {
          name: "Flutter Mobile Apps",
          date: "14-12-2024",
          link: "/listing/flutter",
          list: "https://docs.google.com/forms/d/e/1FAIpQLSexJlmu983IOzuRT7EJrGB2wpkc7tqkV5REFz73a05nLcuALA/viewform",
          img: "/images/bg-course.jpg",
          price: "Rp. 1.498.000",
          discount: "Rp. 749.000",
        },
        {
          name: "Fullstack Web Development",
          date: "08-12-2024",
          link: "/listing/fullstack",
          list: "https://docs.google.com/forms/d/e/1FAIpQLScjeqPgSSOUUw6M8SmVACmREDgPg8t99sXK_G1xJaEpfoh08Q/viewform",
          img: "/images/bg-fullstack.jpg",
          price: "Rp. 1.398.000",
          discount: "Rp. 699.000",
        },
        {
          name: "UI/UX Design Mobile App",
          date: "09-12-2024",
          link: "/listing/uiux",
          list: "https://docs.google.com/forms/d/e/1FAIpQLSd36nibWMNiLXB5bgJcQGRnM9EL3bhDWJgeDrzuqb8g5B4gsw/viewform",
          img: "/images/bg-uiux.jpg",
          price: "Rp. 1.298.000",
          discount: "Rp. 649.000",
        },
      ],
    };
  },
};
</script>
<template>
    <section>
        <div class="max-w-[1440px] sm:mx-auto mx-5 sm:py-20 py-10">
            <div class="mb-10">
                <h1 class="sm:text-5xl text-3xl text-center tracking-wide font-extrabold mb-2 bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent">Tersedia Kursus/Kelas Terbaru</h1>
                <p class="text-base text-gray-300 text-center tracking-wide">Pilih Kelas Yang Anda Butuhkan Untuk Belajar</p>
            </div>

            <div class="flex gap-10 justify-center flex-wrap">
                <div v-for="(general, index) in classGeneral"
                :key="index" class="w-[348px] relative overflow-hidden bg-blue-600 px-5 py-6 rounded-lg shadow-2xl shadow-blue-950 hover:-translate-y-2 duration-300 z-50">

                    <div class="absolute -bottom-36 -left-36 w-[22rem] h-[22rem] opacity-10 bg-white rounded-full -z-40"></div>

                    <div class="absolute -left-7 -rotate-[37deg]">
                        <p class="text-white font-semibold bg-red-600 py-1 px-10">Limited Seat!!</p>
                    </div>
                    
                    <div class="mb-5">
                        <img class="rounded-lg z-50" :src="general.img" alt="">
                    </div>
                    <a :href="general.link" class="text-xl font-semibold text-white tracking-wide mb-1">{{ general.name }}</a>
                    <div class="flex gap-x-2">
                        <p class="border-r text-white pr-2">Jadwal Kelas</p>
                        <p class="text-white">{{ general.date }}</p>
                    </div>

                    <div class="flex items-center gap-x-5 mt-5 z-50">
                        <a :href="general.list" class="text-blue-600 font-semibold bg-white py-2 px-4 rounded-xl">Daftar</a>
                        <div class="flex flex-col">
                            <p class="text-gray-300 font-extrabold text-base"><s>{{ general.price }}</s></p>
                            <p class="text-white font-extrabold text-xl">{{ general.discount }}</p>
                          </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>