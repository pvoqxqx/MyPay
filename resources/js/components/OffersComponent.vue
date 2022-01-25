<template>
    <div class="service-header mb-2">
        <h1 class="game-header my-auto"> {{ gameSlug }} </h1>

        <v-btn
            class="ms-auto my-auto"
            @click="back"
        >
            Go back
        </v-btn>
    </div>
</template>

<script>
export default {
    name: "OffersComponent"
}
</script>

<style scoped>

</style>
