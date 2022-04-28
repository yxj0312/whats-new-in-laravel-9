<template>
    <div class="mt-4">
        <file-pond
            name="image"
            ref="pond"
            label-idle="Click to choose image, or drag here..."
            server="/upload"
            @init="filepondInitialized"
            :allow-browse="false"
            accepted-file-types="image/*"
        ></file-pond>
    </div>
</template>

<script>
import vueFilePond from 'vue-filepond';
import "filepond/dist/filepond.min.css";
import FilePondPluginFileValidationType from 'filepond-plugin-file-validate-type';

const FilePond = vueFilePond(FilePondPluginFileValidationType);

export default {
    components: {
        FilePond
    },

    data() {
        return {
        }
    },
    methods: {
        filepondInitialized() {
            console.log(this.$refs.pond)
        }
    }
}
</script>