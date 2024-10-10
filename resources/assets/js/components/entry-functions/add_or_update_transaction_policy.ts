import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type addOrUpdateTransactionPolicyArguments = {
    country: number;
    investor_status: number;
    can_send: boolean;
    can_receive: boolean;
    max_transaction_amount: number;
    blacklist_countries: [];
};

export const addOrUpdateTransactionPolicy = (args: addOrUpdateTransactionPolicyArguments): InputTransactionData => {
  const { country, investor_status, can_receive, can_send, max_transaction_amount, blacklist_countries } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::add_or_update_transaction_policy`,
        typeArguments: [],
        functionArguments: [
            country,
            investor_status,
            can_send,
            can_receive,
            max_transaction_amount,
            blacklist_countries
        ],
    },
  };
};
