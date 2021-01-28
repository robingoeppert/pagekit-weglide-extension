<template>
    <div class="uk-grid pk-grid-large pk-width-sidebar-large" data-uk-grid-margin>
        <div class="pk-width-content uk-form-horizontal">

            <div class="uk-form-row">
                <label for="form-title" class="uk-form-label">{{ 'Title' | trans }}</label>

                <div class="uk-form-controls">
                    <input id="form-title" class="uk-form-width-large" type="text" name="title" v-model="widget.title" v-validate:required>

                    <p class="uk-form-help-block uk-text-danger" v-show="form.title.invalid">{{ 'Title cannot be blank.' | trans }}</p>
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-queryparams" class="uk-form-label">{{ 'Query Parameters' | trans }}</label>

                <div class="uk-form-controls">
                    <input id="form-queryparams" class="uk-form-width-large" type="text" name="form-queryparams" v-model="widget.data.query_params">
                </div>
            </div>
        </div>

        <div class="pk-width-sidebar">
            <partial name="settings"></partial>
        </div>
    </div>
</template>

<script>
    module.exports = {
        section: {
            label: 'Settings'
        },

        replace: false,

        props: ['widget', 'config', 'form'],

        created() {
            this.$options.partials = this.$parent.$options.partials;
        }
    };

    window.Widgets.components['robingoeppert-weglide-widget-flights:settings'] = module.exports;
</script>