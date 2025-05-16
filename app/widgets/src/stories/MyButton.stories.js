import MyButton from "../components/MyButton.vue";

export default {
  title: "UI/MyButton",
  component: MyButton,
  argTypes: {
    label: { control: "text" },
    variant: {
      control: { type: "select" },
      options: ["primary", "secondary"]
    }
  }
};

const Template = (args) => ({
  components: { MyButton },
  setup() {
    return { args };
  },
  template: '<MyButton v-bind="args" />'
});

export const Primary = Template.bind({});

Primary.args = { label: "Click me", variant: "primary" };

export const Secondary = Template.bind({});

Secondary.args = { label: "Cancel", variant: "secondary" };
