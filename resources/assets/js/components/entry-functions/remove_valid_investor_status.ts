import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type removeValidInvestorStatusArguments = {
    investor_status: number;
};

export const removeValidInvestorStatus = (args: removeValidInvestorStatusArguments): InputTransactionData => {
  const { investor_status } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::remove_valid_investor_status`,
        typeArguments: [],
        functionArguments: [
          investor_status, 
        ],
    },
  };
};
