import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type removeUserIdentityArguments = {
    user: string;
};

export const removeUserIdentity = (args: removeUserIdentityArguments): InputTransactionData => {
  const { user } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::remove_user_identity`,
        typeArguments: [],
        functionArguments: [
            user, 
        ],
    },
  };
};
