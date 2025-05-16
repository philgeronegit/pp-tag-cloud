import MyTag from "../components/MyTag.vue";

export default {
  title: "TAGS/MyTag",
  component: MyTag,
  argTypes: {
    label: { control: "text" },
    color: { control: "color" },
    clickable: { control: "boolean" }
  }
};

const Template = (args) => ({
  components: { MyTag },
  setup() {
    return { args };
  },
  template: '<MyTag v-bind="args" />'
});

export const Default = Template.bind({});
Default.args = {
  label: "Tag Label",
  color: "#42b983",
  clickable: false
};

export const ClickableTag = Template.bind({});
ClickableTag.args = {
  label: "Clickable Tag",
  color: "#ff9800",
  clickable: true
};
ClickableTag.parameters = {
  docs: {
    storyDescription: 'This tag is clickable. Listen to the `click` event.'
  }
};
