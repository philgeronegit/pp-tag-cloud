<template>
  <span
    :class="['my-tag', { clickable }]"
    :style="tagStyle"
    @click="handleClick"
  >
    {{ label }}
  </span>
</template>

<script>
export default {
  name: "MyTag",
  props: {
    label: {
      type: String,
      required: true
    },
    color: {
      type: String,
      default: "#e0e0e0"
    },
    clickable: {
      type: Boolean,
      default: false
    }
  },
  computed: {
    tagStyle() {
      return {
        backgroundColor: this.color,
        borderRadius: "999px",
        padding: "0.25em 0.75em",
        border: "none",
        cursor: this.clickable ? "pointer" : "default",
        userSelect: "none",
        display: "inline-block",
        transition: "box-shadow 0.2s",
        boxShadow: this.clickable ? "0 2px 8px rgba(0,0,0,0.08)" : "none"
      };
    }
  },
  methods: {
    handleClick(event) {
      if (this.clickable) {
        this.$emit("click", event);
      }
    }
  }
};
</script>
