<template>


    <header class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-0 p-0" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/">
                <img src="/storage/img_core/logo.png" alt="log IRTree" width="80px">
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-evenly">
                <slot name="menus"></slot>
            </ul>
                <div class="py-1 px-4 pointer">
                    <i class="bi bi-bag my-f-19 select-none"></i>
                    <span class="mx-1 my-f-11 select-none-i">3</span>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: 'HeaderVue',
}
</script>
