<script>
export default {
  data() {
    return {
      socialMedia: [
        {
          platform: "Instagram",
          name: "@fadlyjaya",
          link: "https://www.instagram.com/_fadlijaya/",
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
            <div class="relative overflow-hidden rounded-full">
                <img class="object-cover w-20 scale-150" src="/images/flutter-class/instructor-flutter.jpg" alt="">
            </div>
            <div>
                <h1 class="text-3xl tracking-wide text-white font-semibold">Muhammad Fadli Jaya</h1>
                <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Mobile Flutter Enginer Disdik Sulsel</p>
            </div>
        </div>
        <hr class="h-px my-8 border-0 bg-gray-600">
        <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Muhammad Fadli Jaya adalah seorang Flutter Engineer berbakat yang mengembangkan solusi mobile untuk Dinas Pendidikan Sulawesi Selatan. Dengan keahlian tinggi dalam membangun aplikasi lintas platform, Fadli mengintegrasikan teknologi modern untuk menciptakan pengalaman pengguna yang responsif dan efisien.</p>
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