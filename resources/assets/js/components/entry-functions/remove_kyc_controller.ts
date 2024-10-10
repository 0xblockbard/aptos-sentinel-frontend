import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type removeKycControllerArguments = {
    registrar_address: string;
};

export const removeKycController = (args: removeKycControllerArguments): InputTransactionData => {
  const { registrar_address } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::kyc_controller::remove_kyc_controller`,
        typeArguments: [],
        functionArguments: [
            registrar_address
        ],
    },
  };
};
