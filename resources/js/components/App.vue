<template>
    <div>
        <h2 class="text-xl text-center">{{ message }}</h2>
        <file-pond
            name="image"
            ref="pond"
            label-idle="Click to choose image, or drag here..."
            server="/upload"
        ></file-pond>
    </div>
</template>

<script>
import vueFilePond from 'vue-filepond';
import "filepond/dist/filepond.min.css";

const FilePond = vueFilePond();

export default {
    components: {
        FilePond
    },
    
    data() {
        return {
            message: 'Hello, world'
        }
    }
}
</script>