<template>
  <default-field :field="field" :errors="errors">
    <template slot="field">
      <!-- <input
        :id="field.name"
        type="text"
        class="w-full form-control form-input form-input-bordered text-right thaanaKeyboardInput"
        :class="errorClasses"
        :placeholder="field.name"
        v-model="value"
      >-->
      <textarea
        class="w-full form-control form-input form-input-bordered py-3 h-auto text-right"
        :id="field.attribute"
        :dusk="field.attribute"
        v-model="value"
        v-bind="extraAttributes"
      />
    </template>
  </default-field>
</template>
<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ["resourceName", "resourceId", "field"],

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || "";
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || "");
    },

    /**
     * Update the field's internal value.
     */
    handleChange(value) {
      this.value = value;
    }
  }
};
</script>



