<script>
export default {
  data() {
    return {
      sections: [
        {
          title: "Dasar UIUX",
          items: [
            "Fundamental UI/UX",
            "Figma (Basic Tools dan Plugins)",
            "Exploration Design",
          ],
        },
        {
          title: "Studi Kasus",
          items: [
            "Userflow & Wireframe",
            "Mobile App Design",
            "Prototype",
            "Portfolio",
          ],
        }
      ],
    };
  },
};
</script>
<template>
    <div class="space-y-7">
        <h1 class="text-3xl tracking-wide text-white font-semibold">Materi Kelas</h1>
        <hr class="h-px my-8 border-0 bg-gray-600">
        <div v-for="(section, index) in sections" :key="index" class="space-y-1">
            <p class="tracking-wider leading-normal text-white sm:text-lg text-base font-bold">{{ section.title }}</p>
            <p v-for="(item, itemIndex) in section.items" :key="itemIndex" class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">- {{ item }}</p>
        </div>
    </div>
</template>