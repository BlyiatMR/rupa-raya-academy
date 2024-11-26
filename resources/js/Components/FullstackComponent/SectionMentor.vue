<script>
export default {
  data() {
    return {
      socialMedia: [
        {
          platform: "Instagram",
          name: "@programer_malas",
          link: "https://www.instagram.com/programer_malas?igsh=MW41dmM5cHhoNml4Yw%3D%3D",
          icon: "fa-brands fa-instagram",
        }
      ],
    };
  },
};
</script>
<template>
    <div class="space-y-7">
        <div class="flex items-center gap-5">
            <img class="w-20" src="/images/profile-instructor.jpg" alt="">
            <div>
                <h1 class="text-3xl tracking-wide text-white font-semibold">Aliem Arif Perkasa</h1>
                <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Manager Fullstack Web Development</p>
            </div>
        </div>
        <hr class="h-px my-8 border-0 bg-gray-600">
        <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Aliem Arif Perkasa adalah seorang Fullstack Web Developer berpengalaman. Dalam kelas ini, <span class="font-bold">Aliem Akan Membimbing Kamu Menguasai Front-End dan Back-End Development</span> dengan pendekatan yang praktis dan mudah dipahami.</p>
        <div class="space-y-3">
          <h3 class="tracking-wider leading-normal text-gray-300 sm:text-lg text-lg">Sosial Media:</h3>
          <div class="flex gap-5">
            <a v-for="(social, index) in socialMedia" :key="index" :href="social.link" target="_blank" class="flex items-center gap-2 tracking-wider leading-normal text-gray-300 sm:text-lg text-base hover:text-blue-500 duration-300">
              <i :class="social.icon" class="text-gray-300 text-2xl"></i>
              {{ social.name }}
            </a>
          </div>
        </div>
    </div>
</template>