<template>
    <v-app>
        <v-card>
            <v-tabs
                v-model="tab"
                background-color="deep-purple accent-4"
                centered
                dark
            >
                <v-tabs-slider></v-tabs-slider>

                <v-tab href="#subscribe">
                    Subscribe
                </v-tab>

                <v-tab href="#contact">
                    Contact
                </v-tab>
            </v-tabs>

            <v-tabs-items v-model="tab">
                <v-tab-item :key="1" value="subscribe">
                    <v-card flat>
                        <v-card-text>subscribe niggers</v-card-text>
                    </v-card>
                </v-tab-item>
                <v-tab-item :key="2" value="contact">
                    <v-card flat>
                        <v-card-text>contact to me brozzers</v-card-text>
                    </v-card>
                </v-tab-item>
            </v-tabs-items>
        </v-card>
    </v-app>
</template>

<script>
    export default {
        name: "ExampleComponent",
        data() {
            return {
                tab: "subcribe"
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>

</style>
