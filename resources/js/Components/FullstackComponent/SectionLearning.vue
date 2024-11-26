<script>
export default {
  data() {
    return {
      sections: [
        {
          title: "Dasar Laravel",
          items: [
            "Pengenalan Laravel",
            "Instalasi Laravel",
            "Struktur Folder Laravel",
          ],
        },
        {
          title: "Frontend Development",
          items: [
            "Blade Templating Engine",
          ],
        },
        {
          title: "Backend Development",
          items: [
            "Routing dan Middleware",
            "MWC (Model-View-Controller)",
            "Eloquent ORM",
            "Form Handling dan Validasi",
          ],
        },
        {
          title: "Studi Kasus",
          items: [
            "Aplikasi CRUD",
            "User Authentication",
            "E-commerce Basic",
            "Git Version Control",
            "Hosting Laravel",
            "Portfolio"
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