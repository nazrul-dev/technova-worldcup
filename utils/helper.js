import { toast } from "react-toastify";
import Success from "assets/sfx/success.mp3";
import Warn from "assets/sfx/warn.mp3";
import Errors from "assets/sfx/error.mp3";
export const notify = (messages, status = "success") => {
  const config = {
    closeButton: false,
    bodyClassName: "whitespace-nowrap text-sm font-semibold",
    autoClose: 1000,
    theme: "dark",
  };
  let audio;
  if (status === "success") {
    audio = new Audio(Success);
    toast.success(messages, config);
  } else if (status === "error") {
    audio = new Audio(Errors);
    toast.error(messages, config);
  } else if (status === "warn") {
    audio = new Audio(Warn);
    toast.warn(messages, config);
  } else {
    toast(messages, config);
  }

  audio.play();
};

export const validateEmail = (email) => {
    return String(email)
      .toLowerCase()
      .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
  };


