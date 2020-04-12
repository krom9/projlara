<template>
    <div class="row">
        <div class="col-12">
            <p v-for="test in testList">
                <a :href="'/tests/' + test.id">{{ test.name }}</a>
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TestList",
        props: ['userid'],
        data() {
            return {
                testList: [],
            }
        },
        methods: {
            getTests() {
                console.log(this.userid);
                axios.get('/api/tests/' + this.userid)
                .then(r => this.testList = r.data);
            }
        },
        created() {
            this.getTests();
        }
    }
</script>

<style scoped>

</style>
