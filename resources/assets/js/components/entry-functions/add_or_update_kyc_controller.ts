import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type addOrUpdateKycControllerArguments = {
    registrar_address: string;
    name: string;
    description: string;
    image_url: string
};

export const addOrUpdateKycController = (args: addOrUpdateKycControllerArguments): InputTransactionData => {
  const { registrar_address, name, description, image_url } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::add_or_update_kyc_controller`,
        typeArguments: [],
        functionArguments: [
            registrar_address,
            name,
            description,
            image_url
        ],
    },
  };
};
