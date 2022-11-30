import Head from "next/head";
import Image from "next/image";
import SelectTeams from "/components/select-teams";
import Modal from "react-modal";
import { useState } from "react";
import { useRouter } from "next/router";
import { notify, validateEmail } from "/utils/helper";

export default function Home() {
  const router = useRouter();
  const [modalIsOpen, setIsOpen] = useState(false);
  const [modalTermAndCondiIsOpen, setModalTermAndCondiIsOpen] = useState(false);
  const [termAndCondi, setTermAndCondi] = useState(false);
  const [fields, setFields] = useState([]);

  function closeModal() {
    setIsOpen(false);
  }

  const handleModalTermAndCondi = (action) => {
    setModalTermAndCondiIsOpen(action);
  };

  const submit = () => {
    if (termAndCondi) {
      setIsOpen(true);
    }
  };

  const refreshData = () => {
    router.replace(router.asPath);
  };
  const send = async () => {
    if (!fields.name?.trim()) {
      return notify("Required Name", "warn");
    }
   
    if (fields.email) {
      if (validateEmail(fields.email) === null) {
        return notify("Invalid Email", "warn");
      }
     
    }else{
      return notify("Required Email", "warn");
    }
    if (!fields.phone?.trim()) {
      return notify("Required Mobile Phone", "warn");
    }
    
    if (!fields.organization?.trim()) {
      return notify("Required Organization", "warn");
    }
 
    try {
      fetch("api/participant/create", {
        body: JSON.stringify(fields),
        headers: {
          "Content-Type": "application/json",
        },
        method: "POST",
      })
        .then((response) => response.json())
        .then((e) => {
          if (e.message === "Email already in use") {
            return notify(e.message, "warn");
          } else {
            setFields([]);
            refreshData();
            closeModal();
            setTermAndCondi(false);
            return notify("Participant Succesfully Added", "success");
          }
        });
    } catch (error) {
      return notify("Please Refresh Page", "error");
    }
  };
  return (
    <>
      <Modal
        ariaHideApp={false}
        style={{
          overlay: {
            backgroundColor: "rgb(0 0 0 / 72%)",
          },
        }}
        isOpen={modalIsOpen}
        onRequestClose={closeModal}
        className="rounded-lg bg-white md:h-[80vh] h-[90vh] md:mx-56 mx-1 mt-10 p-1 md:p-5  "
      >
        <div className="px-5">
          <div className="font-semibold md:text-xl md:mt-0 mt-3 mb-5">
            Complete your personal detail to continue
          </div>
          <div className="">
            <div className="flex flex-col m-2">
              <label className="label-input">Name</label>
              <input
                className="input"
                onChange={(e) => setFields({ ...fields, name: e.target.value })}
              />
            </div>
            <div className="flex flex-col m-2">
              <label className="label-input">Email</label>
              <input
                className="input"
                onChange={(e) =>
                  setFields({ ...fields, email: e.target.value })
                }
              />
            </div>
            <div className="flex flex-col m-2">
              <label className="label-input">Mobile Phone</label>
              <input
                className="input"
                onChange={(e) =>
                  setFields({ ...fields, phone: e.target.value })
                }
              />
            </div>
            <div className="flex flex-col m-2">
              <label className="label-input">Organization</label>
              <input
                className="input"
                onChange={(e) =>
                  setFields({ ...fields, organization: e.target.value })
                }
              />
            </div>
          </div>
          <div className="flex md:justify-end justify-between space-x-2 mt-6">
            <button
              onClick={closeModal}
              className="md:py-2 py-1 md:text-base text-sm px-10 hover:border-opacity-75 border-[#86113E] border rounded text-[#86113E]"
            >
              Cancel
            </button>
            <button
              onClick={() => send()}
              className="md:py-2 py-1 md:text-base text-sm px-10 hover:bg-opacity-75 bg-[#86113E] rounded text-white"
            >
              Submit
            </button>
          </div>
        </div>
      </Modal>
      <Modal
        ariaHideApp={false}
        style={{
          overlay: {
            backgroundColor: "rgb(0 0 0 / 72%)",
          },
        }}
        isOpen={modalTermAndCondiIsOpen}
        className="rounded-lg bg-white md:h-[80vh] h-[90vh] md:mx-56 mx-1 mt-10 p-1 md:p-5 "
      >
        <div className="px-5 relative h-full">
          <div className="font-semibold md:text-xl mb-5 md:mt-0 pt-3">
            Term & Condition
          </div>
          <p>loremasa asa as as</p>
          <div className="flex justify-end space-x-2 mt-6 absolute bottom-0 right-0">
            <button
              onClick={() => handleModalTermAndCondi(false)}
              className="py-2 px-10 hover:bg-opacity-75 bg-[#86113E] rounded text-white"
            >
              OK
            </button>
          </div>
        </div>
      </Modal>
      <div className="min-h-screen bg-white relative min-w-screen">
        <div className="md:block hidden">
          <div className="absolute -top-6 -left-10">
            <Image alt="shape" src={require("/assets/shape/shape-color.png")} />
          </div>
          <div className="absolute left-7 -top-6">
            <Image alt="shape" src={require("/assets/shape/shape-white.png")} />
          </div>
          <div className="absolute left-[100px] -top-6">
            <Image alt="shape" src={require("/assets/shape/shape-white.png")} />
          </div>
          <div className="absolute top-8 left-[64px]">
            <Image alt="shape" src={require("/assets/shape/shape-color.png")} />
          </div>
          <div className="absolute -left-2 top-8">
            <Image alt="shape" src={require("/assets/shape/shape-white.png")} />
          </div>
          <div className="absolute top-[87px] -left-[44px]">
            <Image alt="shape" src={require("/assets/shape/shape-color.png")} />
          </div>
          <div className="absolute top-[87px] left-[25px]">
            <Image alt="shape" src={require("/assets/shape/shape-white.png")} />
          </div>
        </div>
        <div className="md:hidden block z-0">
          <div className="fixed -bottom-5  right-10">
            <Image
              className="w-10"
              alt="shape"
              src={require("/assets/shape/shape-color.png")}
            />
          </div>
          <div className="fixed -bottom-5  right-0">
            <Image
              className="w-10"
              alt="shape"
              src={require("/assets/shape/shape-white.png")}
            />
          </div>
          <div className="fixed bottom-3  right-5">
            <Image
              className="w-10"
              alt="shape"
              src={require("/assets/shape/shape-white.png")}
            />
          </div>
          <div className="fixed bottom-3  -right-5">
            <Image
              className="w-10"
              alt="shape"
              src={require("/assets/shape/shape-color.png")}
            />
          </div>
          <div className="fixed bottom-3  right-[60px]">
            <Image
              className="w-10"
              alt="shape"
              src={require("/assets/shape/shape-white.png")}
            />
          </div>
          <div className="fixed bottom-[40px]  right-[40px]">
            <Image
              className="w-10"
              alt="shape"
              src={require("/assets/shape/shape-color.png")}
            />
          </div>
          <div className="fixed bottom-[40px]  right-[0px]">
            <Image
              className="w-10"
              alt="shape"
              src={require("/assets/shape/shape-white.png")}
            />
          </div>
        </div>
        <div className="absolute top-[200px]  md:top-[170px]  md:w-2/3 w-full ">
          <div className="md:mx-20 mx-5 md:text-left text-center">
            <h1 className="font-bold md:text-[55px] text-[14px] text-left pl-10 md:pl-0">
              Predict
            </h1>
            <h1 className="font-bold md:ml-10 md:text-[80px] text-[25px]  md:-mt-7 -mt-2  text-transparent  bg-clip-text bg-gradient-to-b from-[#86113E] to-[#503400]">
              the Champion
            </h1>
            <div className="md:mr-10">
              <h5 className="text-[12px] md:text-[30px]">
                Put your Prediction dont below!
              </h5>
              <div className="text-base mt-5">
                <SelectTeams
                  value={fields.prediction}
                  onChange={(value) => {
                    setFields({ ...fields, prediction: value });
                  }}
                />

                <div className="flex items-center space-x-3 mt-3">
                  <input
                    checked={termAndCondi}
                    type="checkbox"
                    onClick={(e) => setTermAndCondi(e.target.checked)}
                  />
                  <label className="md:text-base text-xs">
                    <span
                      onClick={() => handleModalTermAndCondi(true)}
                      className="text-[#86113E] md:text-base text-xs"
                    >
                      term & Condition
                    </span>{" "}
                    is apply
                  </label>
                </div>
              </div>
            </div>
            <div className="md:mr-10">
              <button
                onClick={() => submit()}
                className={`${
                  termAndCondi && fields.prediction
                    ? "bg-[#86113E]"
                    : "bg-gray-400 cursor-not-allowed"
                } w-full text-base  text-white font-semibold block mt-5 rounded-lg  py-2 md:py-2.5 px-4`}
              >
                Submit
              </button>
            </div>
          </div>
        </div>
        <div className="absolute top-[30px] md:top-[50px] right-0 md:w-auto w-full">
          <div className="flex justify-center w-full">
            <Image
              alt="shape"
              className="md:h-[500px] md:w-[550px] w-auto h-36"
              src={require("/assets/shape/groupplayer.png")}
            />
          </div>
        </div>
      </div>
    </>
  );
}
