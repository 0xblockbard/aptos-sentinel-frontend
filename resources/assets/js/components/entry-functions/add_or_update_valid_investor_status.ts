import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type addOrUpdateValidInvestorStatusArguments = {
    investor_status: string;
    counter?: number;
};

export const addOrUpdateValidInvestorStatus = (args: addOrUpdateValidInvestorStatusArguments): InputTransactionData => {
  const { investor_status, counter } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::add_or_update_valid_investor_status`,
        typeArguments: [],
        functionArguments: [
          investor_status, 
          counter
        ],
    },
  };
};
