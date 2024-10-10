import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type removeValidCountryArguments = {
    country: number;
};

export const removeValidCountry = (args: removeValidCountryArguments): InputTransactionData => {
  const { country } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::remove_valid_country`,
        typeArguments: [],
        functionArguments: [
            country, 
        ],
    },
  };
};
