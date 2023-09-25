<script setup>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/vue3';
import Section from '@/Components/Section.vue';
import Ventas from '@/Components/Ventas.vue';
import ApplicationMark from '@/Components/ApplicationMark.vue';
defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    ventas: Boolean,
});
</script>

<template>
<Head title="Bienvenido"></Head>
    <div class=" grid grid-cols-2 text-rigth py-6 px-72 bg-gray-900 text-gray-300">
        <div>
            <ApplicationMark class="block h-11 w-auto" />
        </div>

        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-gray-300 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>
            <template v-else>
                <Link :href="route('login')" class="font-semibold text-gray-300 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar sesión</Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 font-semibold text-gray-300 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</Link>
            </template>
        </div>
    </div>

    <header class="bg-gray-800 pt-16 h-screen px-72">
        <div class="h-2/3 flex flex-wrap content-between border-gray-600 pb-36">
            <p class="border-b-2 font-bold border-gray-400 pb-3 text-7xl text-gray-300">
                Barber Gallos
            </p>
        </div>
    </header>
    <Section class="bg-gray-600 pt-16 h-screen ">
        <h2 class="border-b-2 font-bold border-gray-400 pb-3 text-7xl text-gray-300">Servicios</h2>
    </Section>
    <Section id="ventas" class="bg-gray-400 pt-16 h-screen ">
        <h2 class="border-b-2 font-bold border-gray-300 pb-3 text-7xl text-gray-100">
            Ventas
        </h2>
        <div class="grid grid-cols-2">
            <div v-for="ventas in ventas">
                <Ventas :background="ventas">
                    {{ ventas.precio }}
                    {{ ventas.nombre }}
                    

                </Ventas>
            </div>
        </div>

    </Section>
    <Section class="flex justify-between py-10 px-72 bg-gray-500">
        <p>
            &copy; Heras
        </p>
        <div>
            barber
        </div>
    </Section>


    
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
