import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type removeTransactionPolicyArguments = {
    country: number;
    investor_status: number;
};

export const removeTransactionPolicy = (args: removeTransactionPolicyArguments): InputTransactionData => {
  const { country, investor_status } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::remove_transaction_policy`,
        typeArguments: [],
        functionArguments: [
            country, 
            investor_status
        ],
    },
  };
};
