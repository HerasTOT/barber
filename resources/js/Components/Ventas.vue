<template>
    <section class="flex item-center px-10 py-8 justify-between">
        <div  :class="background" class="h-12 w-12 rounded-full border-double border-8">
          

        </div>
        <p class="text-2xl font-extrabold text-gray-00 mx-1">
            <slot>
                
            </slot>

        </p>
    </section>
</template>

<script>
    export default{
        props:[
            'background'
        ]
    }
</script>