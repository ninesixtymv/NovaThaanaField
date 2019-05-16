<template>
  <default-field :field="field" :errors="errors">
    <template slot="field">
      <input
        :id="field.name"
        type="text"
        class="w-full form-control form-input form-input-bordered text-right thaanaKeyboardInput"
        :class="errorClasses"
        :placeholder="field.name"
        v-model="value"
      >
      <!-- <input type="text" class="thaanaKeyboardInput" id="fullname">
      <input type="hidden" name="fullname_thaanaKeyboardState" value="phonetic">-->
    </template>
  </default-field>
</template>
 <!-- <script type="text/javascript" src="./../jtk.js"></script>-->
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
<style scoped>
/* .thaanaKeyboardInput {
  font-family: faruma, "mv iyyu nala", "mv elaaf normal";
  direction: rtl;
} */
</style>


