import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type addOrUpdateUserIdentityArguments = {
    user: string;
    country: number;
    investor_status: number;
    is_frozen: boolean
};

export const addOrUpdateUserIdentity = (args: addOrUpdateUserIdentityArguments): InputTransactionData => {
  const { user, country, investor_status, is_frozen } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::add_or_update_valid_country`,
        typeArguments: [],
        functionArguments: [
            user, 
            country,
            investor_status,
            is_frozen
        ],
    },
  };
};
