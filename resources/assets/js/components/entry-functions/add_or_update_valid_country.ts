import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type addOrUpdateValidCountryArguments = {
    country: string;
    counter?: number;
};

export const addOrUpdateValidCountry = (args: addOrUpdateValidCountryArguments): InputTransactionData => {
  const { country, counter } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::add_or_update_valid_country`,
        typeArguments: [],
        functionArguments: [
            country, 
            counter
        ],
    },
  };
};
