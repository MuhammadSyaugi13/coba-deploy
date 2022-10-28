<script setup>

 const props = defineProps({
    listUser: String
 })   

</script>
<template>
    <div class="container bg-green-500 mx-auto">
        <h1 class="mt-10">Table user</h1>
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(list, i) in listUser.data" :key="i">
                <td>{{i+1}}</td>
                <td>{{list.name}}</td>
                <td>{{list.email}}</td>
            </tr>
        </tbody>
    </table>
</div>
</template>
