<template>
    <div class="mt-4">
        <file-pond
            name="image"
            ref="pond"
            label-idle="Click to choose image, or drag here..."
            @init="filepondInitialized"
            accepted-file-types="image/*"
        ></file-pond>
    </div>
</template>

<script>
import vueFilePond, { setOptions } from 'vue-filepond';
import "filepond/dist/filepond.min.css";
import FilePondPluginFileValidationType from 'filepond-plugin-file-validate-type';

setOptions({
    server: {
        process: {
            url:'./upload',
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content  
            }
        }
    }
});1

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